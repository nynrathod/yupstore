import { LocalStorage } from 'quasar'

export function setFilter (state, filter) {
  LocalStorage.set('test', filter)
  state.filter = filter
}

export function loadData (state) {
  const filter = LocalStorage.getItem('test') || 'red'
  state.filter = filter
}
